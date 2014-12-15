DIST=.dist
PLUGIN_NAME=$(shell basename `pwd`)
SOURCE=./*
TARGET=../target

config: clean manifest
	mkdir -p $(DIST)/$(PLUGIN_NAME)
	cp -pr main.inc.php BUGS CHANGELOG.md COPYING include README.md $(DIST)/$(PLUGIN_NAME)/; \
	find $(DIST) -name '*~' -exec rm \{\} \;


dist: config
	cd $(DIST); \
	mkdir -p $(TARGET); \
	zip -v -r9 $(TARGET)/$(PLUGIN_NAME)-$$(grep Version $(PLUGIN_NAME)/main.inc.php | sed -e 's/.*Version: //').zip $(PLUGIN_NAME)/*; \

manifest:
	@find ./ -type f|egrep -v '(*~|.git|.gitignore|.dist|vendor|target|modele|Makefile|rsync_exclude)'|sed -e 's/\.\///' -e 's/\(.*\)/$(PLUGIN_NAME)\/&/'> ./MANIFEST

clean:
	rm -fr $(DIST)

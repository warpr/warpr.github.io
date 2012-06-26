
all: cv.pdf index.html

cv.pdf: cv.html resume.css
	/opt/prince/bin/prince $<

index.html: cv.html
	cp $< $@

cv.fop.pdf: cv.fo
	fop $+ $@

cv.fo: cv.html
	xsltproc -o $@ xhtml-to-xslfo.xsl $+

cv.xhtml: cv.html
	tidy -quiet -indent -asxhtml -o $@ $+


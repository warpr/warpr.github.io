
all: cv.json cv.private.pdf index.html

cv.json: cv.html
	python ./docraptor.py

cv.private.pdf: cv.html
	/usr/bin/prince $< $@

index.html: cv.html
	ln -s $< $@

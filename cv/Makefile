
all: cv.json cv.private.pdf

cv.json: index.html docraptor.py
	python ./docraptor.py

cv.private.pdf: index.html
	/usr/bin/prince $< $@


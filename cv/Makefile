
all: cv.json cv.private.pdf

cv.json: cv.html docraptor.py
	python ./docraptor.py

cv.private.pdf: cv.html
	/usr/bin/prince $< $@


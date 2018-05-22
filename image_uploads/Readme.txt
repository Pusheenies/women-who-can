Create uploads folder in netbeans - This is where the images will upload to.

Place .htaccess - This prevents the uploads folder being viewed via the browser.  If you try to view the uploads folder via the browser you will receive an 'ACCESS DENIED' notification.

I've allowed for 

file size to not exceed 1mb
ext = png, jpg, jpeg

included errors if file size exceeds limit & check if file ext is correct

Prevention of images being over written by creating a variable called $fileNameNew and using a function called uniqid which is based creates a unique name based on micro seconds at that precise moment in current time format. So you don't just end up with a random number you get a time format in micros seconds and becomes a unique number so it is impossible for the same file name to already have been uploaded. So filename ends up being a combination of the filename.uniquid.actualext.

Hopefully the above makes sense. LJ


 
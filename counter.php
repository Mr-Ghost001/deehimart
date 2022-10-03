<?php

 $counter = 'counter.txt';      // text file to store download count - create manually and put a 0 (zero) in it to begin the count
 $download = 'http://mywebsite.com/file/to/download.zip';    // the link to your download file

 $number = file_get_contents($counter);    // read count file
 $number++;                                // increment count by 1
 $fh = fopen($counter, 'w');               // open count file for writing
 fwrite($fh, $number);                     // write new count to count file
 fclose($fh);                              // close count file
 header("Location: $download");            // get download

?>
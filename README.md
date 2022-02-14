# JBC Speed Test

A script to run tests of upload and download speeds, record results
to a CSV file, and present results in a graph.

## Set up

Copy the `settings.sample.php` file to `settings.php` in the same
directory. Set values for your configuration.

### Data file creation

The script expects there to be 1, 5, 10, 50, and 100 MB files both
locally and on the remote HTTP server. You can create these files 
by running these commands:
```
# dd if=/dev/zero of=/path/to/data/files/1mb.dat bs=1024 count=1024
# dd if=/dev/zero of=/path/to/data/files/5mb.dat bs=1024 count=5120
# dd if=/dev/zero of=/path/to/data/files/10mb.dat bs=1024 count=10240
# dd if=/dev/zero of=/path/to/data/files/50mb.dat bs=1024 count=51200
# dd if=/dev/zero of=/path/to/data/files/100mb.dat bs=1024 count=102400
```

## Running the script
```
# jbc-speed-test [down|up] [1|5|10|50|100] [nocsv] [out] [-q]
# down - Run download test.
# up - Run upload test.
# 1|5|10|50|100 - File size (10MB default for download, 1MB upload)
# nocsv - Do not write results to CSV file.
# out - Show graph of results without running a test (can specify up or down, default is both).
# -q - Limited output.

# # Run a download test with a 10MB file.
# jbc-speed-test

# # Run a download test with a 100MB file.
# jbc-speed-test 100
# jbc-speed-test down 100

# # Run an upload test with a 50MB file.
# jbc-speed-test up 50

# # Show graph of results.
# jbc-speed-test out
```

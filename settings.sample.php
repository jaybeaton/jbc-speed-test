<?php
/**
 * Copy this file to settings.php and set values.
 */

// Full path to the CSV file used to record results.
$csv_path = '/path/to/network-speed.csv';

// Test server URL where data files will be downloaded from.
// It should have 1, 5, 10, 50, and 100MB files in this path.
$test_server_url = 'http://www.example.com/file/path';

// Local path where data files are stored (for upload tests).
$local_data_file_path = '/path/to/data/files';

// Host to ping.
$ping_destination_host = '8.8.8.8';

// URL used to lookup ISP info.
$isp_lookup_url = '';

/**
 * Create data files by running these commands:
 *
 * # dd if=/dev/zero of=/path/to/data/files/1mb.dat bs=1024 count=1024
 * # dd if=/dev/zero of=/path/to/data/files/5mb.dat bs=1024 count=5120
 * # dd if=/dev/zero of=/path/to/data/files/10mb.dat bs=1024 count=10240
 * # dd if=/dev/zero of=/path/to/data/files/50mb.dat bs=1024 count=51200
 * # dd if=/dev/zero of=/path/to/data/files/100mb.dat bs=1024 count=102400
 */

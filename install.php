<?php

// <one line to give the program's name and a brief idea of what it does.>
// Copyright (C) <year>  <name of author>

// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as published
// by the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.

// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.

// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.

$files = glob('./*-install.json', GLOB_BRACE);
foreach($files as $file) {
    
    $text = file_get_contents($file);
    $json=json_decode($text,true);

    $err="";

    foreach ($json['app']['requires'] as $i => $ext)
        {

            if (!extension_loaded($i)) {
                $err .= "Required extension " . $i . " is not installed.\n";
            }
            
            $ver = phpversion($i);

            if ($ver != $ext) {
                if ($ext > $ver) {
                    $err .= "You require " . $i . " version " . $ext . " but " . $ver . " is installed.\n";
                }
            }

        }

    echo $err;

}

?>
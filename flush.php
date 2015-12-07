<?php

infra_test(true);
infra_install(true);//Установка силой
Ans::ret($ans, 'Cache cleared, install complete');

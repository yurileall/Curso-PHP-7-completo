<?php
session_start();
session_destroy();
header('location: basico_sessao.php');
<?php
class MagicClass {
    public function __construct() {
        echo "__construct\n";}
    public function __destruct() {
        echo "__destruct\n";}
    public function __call($name, $arguments) {
        echo "__call: {$name}\n";}
    public static function __callStatic($name, $arguments) {
        echo "__callStatic: {$name}\n";}
    public function __get($name) {
        echo "__get: {$name}\n";
        return null;}
    public function __set($name, $value) {
        echo "__set: {$name} = {$value}\n";}
    public function __isset($name) {
        echo "__isset: {$name}\n";
        return false;}
    public function __unset($name) {
        echo "__unset: {$name}\n";}
    public function __toString() {
        echo "__toString\n";
        return "MagicClass as string";}
    public function __invoke() {
        echo "__invoke\n";}
    public function __sleep() {
        echo "__sleep\n";
        return [];}
    public function __wakeup() {
        echo "__wakeup\n";}
    public function __clone() {
        echo "__clone\n";}
    public function __debugInfo() {
        echo "__debugInfo\n";
        return [];}
    public function __set_state($array) {
        echo "__set_state\n";
        return new self();}
    public function __toString() {
        echo "__toString\n";
        return "MagicClass instance as string";}
    public function __call($method, $args) {
        echo "__call: {$method}\n";}
    public function __get($name) {
        echo "__get: {$name}\n";
        return null;}
    public function __set($name, $value) {
        echo "__set: {$name} = {$value}\n";}
    public function __isset($name) {
        echo "__isset: {$name}\n";
        return false;}
    public function __unset($name) {
        echo "__unset: {$name}\n";}}



<?php if(!defined('KIRBY')) exit ?>

title: Recipe
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  ingredients:
    label: Ingredients
    type: structure
    entry: >
      {{ingredient}} - {{amount}}
    fields:
      ingredient:
        label: ingredient
        type: text
      amount:
        label: amount
        type: text
  directions:
    label: Directions
    type: structure
    entry: >
      {{step}}
    fields:
      step:
        label: step
        type: textarea

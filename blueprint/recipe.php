<?php if(!defined('KIRBY')) exit ?>

title: Recipe
pages: false
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
    type: recipe
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
    type: recipe
    entry: >
      {{step}}
    fields:
      step:
        label: step
        type: textarea

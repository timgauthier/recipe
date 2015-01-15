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
  directionsinfo:
    label: Direction steps
    type: info
    text: >
      Any steps that start with a title "\###" will not be numbered in the list. Use this to put information in the directions. Such as **Day of** or *Optional* steps.
  directions:
    label: Directions
    type: recipe
    entry: >
      {{step}}
    fields:
      step:
        label: step
        type: textarea

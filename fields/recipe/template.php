<div class="recipe" data-field="structure" data-page="<?php echo $field->page() ?>" data-sortable="true">

  <?php echo $field->headline() ?>

  <input type="hidden" name="<?php __($field->name()) ?>" value="<?php __(json_encode($field->value()), false) ?>">

  <script class="structure-entries-template" type="text/x-handlebars-template">

    {{#unless entries}}
    <div class="structure-empty">
      <?php _l('fields.structure.empty') ?> <a class="structure-add-button" href="#"><?php _l('fields.structure.add.first') ?></a>
    </div>
    {{/unless}}

    {{#entries}}
    <div class="structure-entry field-grid-item" id="structure-entry-{{_id}}">
      <div class="structure-entry-content text field-grid-item field-grid-item-3-4">
        <?php echo $field->entry() ?>
      </div>

      <nav class="structure-entry-options cf field-grid-item field-grid-item-1-4">
        <button type="button" data-structure-id="{{_id}}" class="btn btn-with-icon structure-edit-button">
          <?php i('pencil', 'left') . _l('fields.structure.edit') ?>
        </button>
        <button type="button" data-structure-id="{{_id}}" class="btn btn-with-icon structure-delete-button">
          <?php i('trash-o', 'left') . _l('fields.structure.delete') ?>
        </button>
      </nav>
    </div>
    {{/entries}}
        {{#if entries}}

        <button type="button" data-structure-id="{{_id}}" class="btn btn-with-icon structure-add-button cf">
          <?php i('plus-circle', 'left') . _l('fields.structure.add') ?>
        </button>
    {{/if}}

  </script>



</div>

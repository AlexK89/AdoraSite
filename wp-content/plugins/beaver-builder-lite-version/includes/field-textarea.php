<textarea name="<?php echo $name; ?>"<?php if ( isset( $field['class'] ) ) { echo ' class="' . $field['class'] . '"';
} if ( isset( $field['placeholder'] ) ) { echo ' placeholder="' . $field['placeholder'] . '"';
} if ( isset( $field['rows'] ) ) { echo ' rows="' . $field['rows'] . '"';} ?>><?php echo $value; ?></textarea>

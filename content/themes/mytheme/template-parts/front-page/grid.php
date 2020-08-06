        <div class="grid__item">
          <!-- 
            customize fontawesome : using advanced custom fields and advanced custom fields font awesome 
            ACF / font awesome settings -> version 4
            ACF / Groupes de champs / Ajouter -> add a new group
            Ajouter un champ -> create icon field / Type de champ = Font Awesome Icon / Valeur de retour = Icon Class here
            as we want this field to be displayed only in this grid we add a condition 
            now we find this new field in the articles having the "competences" category and we can choose which icon we want to display for each posts
            to display it in this template we use the_field() which comes with ACF
          -->
          <i class="grid__item__icon fa <?php the_field('icon'); ?>" aria-hidden="true"></i>
          <h3 class="grid__item__title"><?php the_title(); ?></h3>
          <?php the_content(); ?>
        </div>
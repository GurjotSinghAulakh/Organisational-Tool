<?php
  // if ($title == 'view_internships_student' || $title == 'index_admin' || $title == 'not_published_internships' || $title == 'view_profile') {
  if ($title == 'view_internships_student' || $title == 'index_admin' || $title == 'not_published_internships') {
    echo '<link rel="stylesheet" href="styles/index.css">';
  }
  else if ($title == 'internships_company') {
    echo '<link rel="stylesheet" href="styles/internships_company.css">';
  }
  else if ($title == 'create_internship') {
    echo '<link rel="stylesheet" href="styles/create_internship.css">';
  }
  else if ($title == 'edit_internship') {
    echo '<link rel="stylesheet" href="styles/create_internship.css">';
  }
  else if ($title == 'members') {
    echo '<link rel="stylesheet" href="styles/members.css">';
  }
  else if ($title == 'status_student') {
    echo '<link rel="stylesheet" href="styles/index.css">';
    echo '<link rel="stylesheet" href="styles/status_student.css">';
  }
  else if ($title == 'view_profile') {
    echo '<link rel="stylesheet" href="styles/view_profile.css">';
  }
  
?>
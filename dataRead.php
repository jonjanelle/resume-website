<?php

  $project_data = file_get_contents("data/project_data.json");
  $projects = json_decode($project_data, true);

  $skills_data = file_get_contents("data/skills_data.json");
  $skills = json_decode($skills_data, true);

# Harris Hip Score (HHS) - Stairs - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Harris Hip Score (HHS) - Stairs**

## CodeSystem: Harris Hip Score (HHS) - Stairs 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScoreStairs | *Version*:2.14.0 |
| Active as of 2022-07-06 | *Computable Name*:HarrisHipScoreStairs |

 
Harris Hip Score (HHS) - Stairs. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html 

 This Code system is referenced in the content logical definition of the following value sets: 

* [HarrisHipScoreTrappegang](ValueSet-HarrisHipScoreTrappegang.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "HarrisHipScoreStairs",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScoreStairs",
  "version" : "2.14.0",
  "name" : "HarrisHipScoreStairs",
  "title" : "Harris Hip Score (HHS) - Stairs",
  "status" : "active",
  "date" : "2022-07-06T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Harris Hip Score (HHS) - Stairs. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "4",
      "display" : "Normally without using a railing",
      "definition" : "Normally without using a railing (4)"
    },
    {
      "code" : "2",
      "display" : "Normally using a railing",
      "definition" : "Normally using a railing (2)"
    },
    {
      "code" : "1",
      "display" : "In any manner",
      "definition" : "In any manner (1)"
    },
    {
      "code" : "0",
      "display" : "Unable to do stairs",
      "definition" : "Unable to do stairs (0)"
    }
  ]
}

```

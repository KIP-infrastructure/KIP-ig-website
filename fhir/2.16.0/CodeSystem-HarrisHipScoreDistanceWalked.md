# Harris Hip Score (HHS) - Distance walked - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Harris Hip Score (HHS) - Distance walked**

## CodeSystem: Harris Hip Score (HHS) - Distance walked 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScoreDistanceWalked | *Version*:2.16.0 |
| Active as of 2022-07-06 | *Computable Name*:HarrisHipScoreDistanceWalked |

 
Harris Hip Score (HHS) - Distance walked. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html 

 This Code system is referenced in the content logical definition of the following value sets: 

* [HarrisHipScoreGangdistance](ValueSet-HarrisHipScoreGangdistance.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "HarrisHipScoreDistanceWalked",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScoreDistanceWalked",
  "version" : "2.16.0",
  "name" : "HarrisHipScoreDistanceWalked",
  "title" : "Harris Hip Score (HHS) - Distance walked",
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
  "description" : "Harris Hip Score (HHS) - Distance walked. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 5,
  "concept" : [
    {
      "code" : "11",
      "display" : "Unlimited",
      "definition" : "Unlimited (11)"
    },
    {
      "code" : "8",
      "display" : "Six blocks (30 minutes)",
      "definition" : "Six blocks (30 minutes) (8)"
    },
    {
      "code" : "5",
      "display" : "Two og three blocks (10-15 minutes)",
      "definition" : "Two og three blocks (10-15 minutes) (5)"
    },
    {
      "code" : "2",
      "display" : "Indoors only",
      "definition" : "Indoors only (2)"
    },
    {
      "code" : "0",
      "display" : "Bed and chair only",
      "definition" : "Bed and chair only (0)"
    }
  ]
}

```

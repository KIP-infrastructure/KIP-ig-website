# Harris Hip Score (HHS) - Support - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Harris Hip Score (HHS) - Support**

## CodeSystem: Harris Hip Score (HHS) - Support 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScoreSupport | *Version*:2.17.1 |
| Active as of 2022-07-06 | *Computable Name*:HarrisHipScoreSupport |

 
Harris Hip Score (HHS) - Support. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html 

 This Code system is referenced in the content logical definition of the following value sets: 

* [HarrisHipScoreHjaelpemidler](ValueSet-HarrisHipScoreHjaelpemidler.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "HarrisHipScoreSupport",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScoreSupport",
  "version" : "2.17.1",
  "name" : "HarrisHipScoreSupport",
  "title" : "Harris Hip Score (HHS) - Support",
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
  "description" : "Harris Hip Score (HHS) - Support. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 6,
  "concept" : [
    {
      "code" : "11",
      "display" : "None",
      "definition" : "None (11)"
    },
    {
      "code" : "7",
      "display" : "Cane/Walking stick for long walks",
      "definition" : "Cane/Walking stick for long walks (7)"
    },
    {
      "code" : "5",
      "display" : "Cane/Walking stick most of the time",
      "definition" : "Cane/Walking stick most of the time (5)"
    },
    {
      "code" : "3",
      "display" : "One crutch",
      "definition" : "One crutch (3)"
    },
    {
      "code" : "2",
      "display" : "Two Canes/Walking sticks",
      "definition" : "Two Canes/Walking sticks (2)"
    },
    {
      "code" : "0",
      "display" : "Two crutches, walker or not able to walk",
      "definition" : "Two crutches, walker or not able to walk (0)"
    }
  ]
}

```

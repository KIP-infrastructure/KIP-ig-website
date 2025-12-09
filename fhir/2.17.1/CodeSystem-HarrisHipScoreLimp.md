# Harris Hip Score (HHS) - Limp - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Harris Hip Score (HHS) - Limp**

## CodeSystem: Harris Hip Score (HHS) - Limp 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScoreLimp | *Version*:2.17.1 |
| Active as of 2022-07-06 | *Computable Name*:HarrisHipScoreLimp |

 
Harris Hip Score (HHS) - Limp. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html 

 This Code system is referenced in the content logical definition of the following value sets: 

* [HarrisHipScoreGangafvikling](ValueSet-HarrisHipScoreGangafvikling.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "HarrisHipScoreLimp",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScoreLimp",
  "version" : "2.17.1",
  "name" : "HarrisHipScoreLimp",
  "title" : "Harris Hip Score (HHS) - Limp",
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
  "description" : "Harris Hip Score (HHS) - Limp. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "11",
      "display" : "None",
      "definition" : "None (11)"
    },
    {
      "code" : "8",
      "display" : "Slight",
      "definition" : "Slight (8)"
    },
    {
      "code" : "5",
      "display" : "Moderate",
      "definition" : "Moderate (5)"
    },
    {
      "code" : "0",
      "display" : "Severe",
      "definition" : "Severe (0)"
    }
  ]
}

```

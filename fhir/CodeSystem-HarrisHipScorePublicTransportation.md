# Harris Hip Score (HHS) - Public transportation - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Harris Hip Score (HHS) - Public transportation**

## CodeSystem: Harris Hip Score (HHS) - Public transportation 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScorePublicTransportation | *Version*:2.13.0 |
| Active as of 2022-07-06 | *Computable Name*:HarrisHipScorePublicTransportation |

 
Harris Hip Score (HHS) - Public transportation. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html 

 This Code system is referenced in the content logical definition of the following value sets: 

* [HarrisHipScoreOffentligTransport](ValueSet-HarrisHipScoreOffentligTransport.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "HarrisHipScorePublicTransportation",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScorePublicTransportation",
  "version" : "2.13.0",
  "name" : "HarrisHipScorePublicTransportation",
  "title" : "Harris Hip Score (HHS) - Public transportation",
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
  "description" : "Harris Hip Score (HHS) - Public transportation. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "1",
      "display" : "Able to use transportation (bus)",
      "definition" : "Able to use transportation (bus) (1)"
    },
    {
      "code" : "0",
      "display" : "Unable to use public transportation (bus)",
      "definition" : "Unable to use public transportation (bus) (0)"
    }
  ]
}

```

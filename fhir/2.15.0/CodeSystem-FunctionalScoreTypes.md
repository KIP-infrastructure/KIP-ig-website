# FunctionalScoreTypes - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FunctionalScoreTypes**

## CodeSystem: FunctionalScoreTypes 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/FunctionalScoreTypes | *Version*:2.15.0 |
| Active as of 2024-10-07 | *Computable Name*:FunctionalScoreTypes |

 
Anvendte typer ved måling af helbreds- eller funktionel score 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ScoreTyperHOFTER](ValueSet-ScoreTyperHOFTER.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "FunctionalScoreTypes",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/FunctionalScoreTypes",
  "version" : "2.15.0",
  "name" : "FunctionalScoreTypes",
  "title" : "FunctionalScoreTypes",
  "status" : "active",
  "date" : "2024-10-07T00:00:00+02:00",
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
  "description" : "Anvendte typer ved måling af helbreds- eller funktionel score",
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "CAS",
      "display" : "Cumulated Ambulation Score (CAS)",
      "definition" : "Cumulated Ambulation Score"
    },
    {
      "code" : "NMS",
      "display" : "New Mobility Score (NMS)",
      "definition" : "New Mobility Score"
    }
  ]
}

```

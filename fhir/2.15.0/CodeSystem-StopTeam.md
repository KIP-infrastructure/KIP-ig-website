# Teammedlemmer på stopholdet - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Teammedlemmer på stopholdet**

## CodeSystem: Teammedlemmer på stopholdet 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/StopTeam | *Version*:2.15.0 |
| Active as of 2022-06-29 | *Computable Name*:StopTeam |

 
Teammedlemmer/personale på stopholdet 

 This Code system is referenced in the content logical definition of the following value sets: 

* [StopTeam](ValueSet-StopTeam.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "StopTeam",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/StopTeam",
  "version" : "2.15.0",
  "name" : "StopTeam",
  "title" : "Teammedlemmer på stopholdet",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Teammedlemmer/personale på stopholdet",
  "content" : "complete",
  "count" : 6,
  "concept" : [
    {
      "code" : "anastesiLaege",
      "display" : "Anæstesilæge(r)",
      "definition" : "Anæstesilæge(r)"
    },
    {
      "code" : "anastesiSP",
      "display" : "Anæstesisygeplejerske(r)",
      "definition" : "Anæstesisygeplejerske(r)"
    },
    {
      "code" : "kardiolog",
      "display" : "Kardiolog(er)",
      "definition" : "Kardiolog(er)"
    },
    {
      "code" : "SP",
      "display" : "Sygeplejerske(r)",
      "definition" : "Sygeplejerske(r)"
    },
    {
      "code" : "portor",
      "display" : "Portør/serviceass.",
      "definition" : "Portør/serviceass."
    },
    {
      "code" : "andre",
      "display" : "Andre",
      "definition" : "Andre"
    }
  ]
}

```

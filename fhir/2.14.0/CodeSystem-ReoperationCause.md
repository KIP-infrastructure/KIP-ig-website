# Cause of reoperation - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cause of reoperation**

## CodeSystem: Cause of reoperation 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ReoperationCause | *Version*:2.14.0 |
| Active as of 2022-12-06 | *Computable Name*:ReoperationCause |

 
Cause of reoperation 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ReoperationAarsagDKRR](ValueSet-ReoperationAarsagDKRR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ReoperationCause",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ReoperationCause",
  "version" : "2.14.0",
  "name" : "ReoperationCause",
  "title" : "Cause of reoperation",
  "status" : "active",
  "date" : "2022-12-06T00:00:00+02:00",
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
  "description" : "Cause of reoperation",
  "content" : "complete",
  "count" : 6,
  "concept" : [
    {
      "code" : "infection",
      "display" : "Infection",
      "definition" : "Infektion"
    },
    {
      "code" : "movement_restriction",
      "display" : "Movement restriction",
      "definition" : "Bevægelsesindskrænkning (artrofibrose)"
    },
    {
      "code" : "meniscus_damage",
      "display" : "Meniscus damage",
      "definition" : "Menisk skade"
    },
    {
      "code" : "cartilage_damage",
      "display" : "Cartilage damage",
      "definition" : "Brusk skade"
    },
    {
      "code" : "implant_removed",
      "display" : "Implant removed",
      "definition" : "Implantat fjernet"
    },
    {
      "code" : "cicatricial_tissue",
      "display" : "Cicatricial tissue",
      "definition" : "Arvæv/Cyklop dannelse"
    }
  ]
}

```

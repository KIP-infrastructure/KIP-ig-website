# Scandinavian Stroke Scale (SSS) - Walk - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Scandinavian Stroke Scale (SSS) - Walk**

## CodeSystem: Scandinavian Stroke Scale (SSS) - Walk 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/SSSWalk | *Version*:2.14.1 |
| Active as of 2022-06-23 | *Computable Name*:SSSWalk |

 
Scandinavian Stroke Scale (SSS) - Walk: Hvis patienten ikke kan gå, bedømmes om patienten kan sidde oprejst på sengekanten uden at støtte hænderne (3) eller ikke (0). 

 This Code system is referenced in the content logical definition of the following value sets: 

* [SSSGang](ValueSet-SSSGang.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "SSSWalk",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/SSSWalk",
  "version" : "2.14.1",
  "name" : "SSSWalk",
  "title" : "Scandinavian Stroke Scale (SSS) - Walk",
  "status" : "active",
  "date" : "2022-06-23T00:00:00+02:00",
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
  "description" : "Scandinavian Stroke Scale (SSS) - Walk: Hvis patienten ikke kan gå, bedømmes om patienten kan sidde oprejst på sengekanten uden at støtte hænderne (3) eller ikke (0).",
  "content" : "complete",
  "count" : 5,
  "concept" : [
    {
      "code" : "12",
      "display" : "12",
      "definition" : "Pt. kan gå mindst 5 m uden hjælpemidler."
    },
    {
      "code" : "9",
      "display" : "9",
      "definition" : "Pt. kan gå mindst 5 m med hjælpemidler."
    },
    {
      "code" : "6",
      "display" : "6",
      "definition" : "Pt. kan gå mindst 5 m med personstøtte."
    },
    {
      "code" : "3",
      "display" : "3",
      "definition" : "Pt. kan sidde uden støtte."
    },
    {
      "code" : "0",
      "display" : "0",
      "definition" : "Sengebunden eller i kørestol med støtte."
    }
  ]
}

```

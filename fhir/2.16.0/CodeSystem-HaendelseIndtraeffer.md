# Hændelse indtræffer - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hændelse indtræffer**

## CodeSystem: Hændelse indtræffer 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/HaendelseIndtraeffer | *Version*:2.16.0 |
| Active as of 2024-02-13 | *Computable Name*:HaendelseIndtraeffer |

 
I hvilken sammenhæng sker en given hændelse 

 This Code system is referenced in the content logical definition of the following value sets: 

* [UrniLaekDUGA](ValueSet-UrniLaekDUGA.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "HaendelseIndtraeffer",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/HaendelseIndtraeffer",
  "version" : "2.16.0",
  "name" : "HaendelseIndtraeffer",
  "title" : "Hændelse indtræffer",
  "status" : "active",
  "date" : "2024-02-13T00:00:00+02:00",
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
  "description" : "I hvilken sammenhæng sker en given hændelse",
  "content" : "complete",
  "count" : 8,
  "concept" : [
    {
      "code" : "0",
      "display" : "Aldrig",
      "definition" : "Aldrig"
    },
    {
      "code" : "7",
      "display" : "Hele tiden",
      "definition" : "Hele tiden"
    },
    {
      "code" : "4",
      "display" : "Fysisk aktiv",
      "definition" : "Fysisk aktiv"
    },
    {
      "code" : "5",
      "display" : "Efter toilet",
      "definition" : "Efter toilet"
    },
    {
      "code" : "1",
      "display" : "Inden toilet",
      "definition" : "Inden toilet"
    },
    {
      "code" : "2",
      "display" : "Ved hoste",
      "definition" : "Ved hoste"
    },
    {
      "code" : "3",
      "display" : "Sover",
      "definition" : "Sover"
    },
    {
      "code" : "6",
      "display" : "Uden grund",
      "definition" : "Uden grund"
    }
  ]
}

```

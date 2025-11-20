# Hændelse indtræffer - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hændelse indtræffer**

## CodeSystem: Hændelse indtræffer 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/HaendelseIndtraeffer | *Version*:2.14.1 |
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
  "version" : "2.14.1",
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
      "code" : "aldrig",
      "display" : "Aldrig",
      "definition" : "Aldrig"
    },
    {
      "code" : "altid",
      "display" : "Hele tiden",
      "definition" : "Hele tiden"
    },
    {
      "code" : "aktiv",
      "display" : "Fysisk aktiv",
      "definition" : "Fysisk aktiv"
    },
    {
      "code" : "efter-toilet",
      "display" : "Efter toilet",
      "definition" : "Efter toilet"
    },
    {
      "code" : "inden-toilet",
      "display" : "Inden toilet",
      "definition" : "Inden toilet"
    },
    {
      "code" : "hoste",
      "display" : "Ved hoste",
      "definition" : "Ved hoste"
    },
    {
      "code" : "sover",
      "display" : "Sover",
      "definition" : "Sover"
    },
    {
      "code" : "uden-grund",
      "display" : "Uden grund",
      "definition" : "Uden grund"
    }
  ]
}

```

# Typer af central blokade - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Typer af central blokade**

## ValueSet: Typer af central blokade 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/CentralBlockType | *Version*:2.27.3 |
| Active as of 2022-06-09 | *Computable Name*:CentralBlockType |

 
Typer af central blokade 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "CentralBlockType",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/CentralBlockType",
  "version" : "2.27.3",
  "name" : "CentralBlockType",
  "title" : "Typer af central blokade",
  "status" : "active",
  "date" : "2022-06-09T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Typer af central blokade",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/BlockTypes",
      "concept" : [{
        "code" : "epidural_cervical",
        "display" : "Epidural Cervical"
      },
      {
        "code" : "epidural_thorakal",
        "display" : "Epidural Thorakal"
      },
      {
        "code" : "epidural_sakral",
        "display" : "Epidural Sakral"
      },
      {
        "code" : "epidural+spinal",
        "display" : "Epidural+Spinal"
      },
      {
        "code" : "epidural_lumbal",
        "display" : "Epidural Lumbal"
      },
      {
        "code" : "spinal_lumbal\"",
        "display" : "Spinal lumbal"
      },
      {
        "code" : "spinal_catheter",
        "display" : "Spinal kateter"
      },
      {
        "code" : "other",
        "display" : "Anden"
      }]
    }]
  }
}

```

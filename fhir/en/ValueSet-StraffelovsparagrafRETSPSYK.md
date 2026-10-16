# Straffelovsparagraf (RETSPSYK) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Straffelovsparagraf (RETSPSYK)**

## ValueSet: Straffelovsparagraf (RETSPSYK) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/StraffelovsparagrafRETSPSYK | *Version*:2.27.0 |
| Active as of 2022-09-28 | *Computable Name*:StraffelovsparagrafRETSPSYK |

 
Straffelovsparagraf (RETSPSYK) 

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
  "id" : "StraffelovsparagrafRETSPSYK",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/StraffelovsparagrafRETSPSYK",
  "version" : "2.27.0",
  "name" : "StraffelovsparagrafRETSPSYK",
  "title" : "Straffelovsparagraf (RETSPSYK)",
  "status" : "active",
  "date" : "2022-09-28T00:00:00+02:00",
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
  "description" : "Straffelovsparagraf (RETSPSYK)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Paragraph",
      "concept" : [{
        "code" : "§16",
        "display" : "§16"
      },
      {
        "code" : "§69",
        "display" : "§69"
      },
      {
        "code" : "§73",
        "display" : "§73"
      }]
    }]
  }
}

```

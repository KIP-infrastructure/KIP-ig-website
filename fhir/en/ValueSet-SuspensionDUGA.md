# Suspension (DUGA) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Suspension (DUGA)**

## ValueSet: Suspension (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SuspensionDUGA | *Version*:2.27.1 |
| Active as of 2024-02-14 | *Computable Name*:SuspensionDUGA |

 
Procedurekode - Suspension (DUGA) 

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
  "id" : "SuspensionDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SuspensionDUGA",
  "version" : "2.27.1",
  "name" : "SuspensionDUGA",
  "title" : "Suspension (DUGA)",
  "status" : "active",
  "date" : "2024-02-14T00:00:00+02:00",
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
  "description" : "Procedurekode - Suspension (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureUrogyn",
      "concept" : [{
        "code" : "KZLA01",
        "display" : "KZLA01: Suspension af vaginaltop a.m. McCall"
      },
      {
        "code" : "KZLA02",
        "display" : "KZLA02: Suspension af vaginaltop a.m. Bob Shull"
      }]
    }]
  }
}

```

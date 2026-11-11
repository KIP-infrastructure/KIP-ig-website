# Civilstatus (RETSPSYK) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Civilstatus (RETSPSYK)**

## ValueSet: Civilstatus (RETSPSYK) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/CivilstatusRETSPSYK | *Version*:2.27.3 |
| Active as of 2022-09-30 | *Computable Name*:CivilstatusRETSPSYK |

 
Civilstatus (RETSPSYK) 

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
  "id" : "CivilstatusRETSPSYK",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/CivilstatusRETSPSYK",
  "version" : "2.27.3",
  "name" : "CivilstatusRETSPSYK",
  "title" : "Civilstatus (RETSPSYK)",
  "status" : "active",
  "date" : "2022-09-30T00:00:00+02:00",
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
  "description" : "Civilstatus (RETSPSYK)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MaritalStatus",
      "concept" : [{
        "code" : "cohabitant",
        "display" : "Samlevende/gift"
      },
      {
        "code" : "livingalone",
        "display" : "Bor alene"
      }]
    }]
  }
}

```

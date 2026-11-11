# Hjerneødem (DAP) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hjerneødem (DAP)**

## ValueSet: Hjerneødem (DAP) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/HjerneoedemDAP | *Version*:2.27.3 |
| Active as of 2022-09-02 | *Computable Name*:HjerneoedemDAP |

 
Hjerneødem fundet i forbindelse med billeddiagnostisk undersøgelse (DAP) 

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
  "id" : "HjerneoedemDAP",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/HjerneoedemDAP",
  "version" : "2.27.3",
  "name" : "HjerneoedemDAP",
  "title" : "Hjerneødem (DAP)",
  "status" : "active",
  "date" : "2022-09-02T00:00:00+02:00",
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
  "description" : "Hjerneødem fundet i forbindelse med billeddiagnostisk undersøgelse (DAP)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/EdemaStroke",
      "concept" : [{
        "code" : "coed_1",
        "display" : "COED 1"
      },
      {
        "code" : "coed_2",
        "display" : "COED 2"
      },
      {
        "code" : "coed_3",
        "display" : "COED 3"
      }]
    }]
  }
}

```

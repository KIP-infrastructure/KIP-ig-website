# Indgreb - ventralhernie anden minimal indgreb (DHDB) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Indgreb - ventralhernie anden minimal indgreb (DHDB)**

## ValueSet: Indgreb - ventralhernie anden minimal indgreb (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/IndgrebVentralhernieAndenDHDB | *Version*:2.27.0 |
| Active as of 2022-07-20 | *Computable Name*:IndgrebVentralhernieAndenDHDB |

 
Indgreb - ventralhernie anden minimal indgreb (DHDB) 

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
  "id" : "IndgrebVentralhernieAndenDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/IndgrebVentralhernieAndenDHDB",
  "version" : "2.27.0",
  "name" : "IndgrebVentralhernieAndenDHDB",
  "title" : "Indgreb - ventralhernie anden minimal indgreb (DHDB)",
  "status" : "active",
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "Indgreb - ventralhernie anden minimal indgreb (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "milos",
        "display" : "MILOS"
      },
      {
        "code" : "emilos",
        "display" : "eMILOS"
      },
      {
        "code" : "etep",
        "display" : "eTEP"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden - specificér"
      }]
    }]
  }
}

```

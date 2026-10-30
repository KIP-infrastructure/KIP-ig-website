# Indgreb - Components Separation (DHDB) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Indgreb - Components Separation (DHDB)**

## ValueSet: Indgreb - Components Separation (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/IndgrebComponentsSeparationDHDB | *Version*:2.27.1 |
| Active as of 2022-07-20 | *Computable Name*:IndgrebComponentsSeparationDHDB |

 
Indgreb - Components Separation (DHDB) 

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
  "id" : "IndgrebComponentsSeparationDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/IndgrebComponentsSeparationDHDB",
  "version" : "2.27.1",
  "name" : "IndgrebComponentsSeparationDHDB",
  "title" : "Indgreb - Components Separation (DHDB)",
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
  "description" : "Indgreb - Components Separation (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "open",
        "display" : "Åben"
      },
      {
        "code" : "endoscopic",
        "display" : "Endoskopisk"
      }]
    }]
  }
}

```

# Kirurgisk adgang (DSR) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kirurgisk adgang (DSR)**

## ValueSet: Kirurgisk adgang (DSR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KirurgiskAdgangDSR | *Version*:2.27.0 |
| Active as of 2022-10-06 | *Computable Name*:KirurgiskAdgangDSR |

 
Kirurgisk adgang (DSR) 

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
  "id" : "KirurgiskAdgangDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KirurgiskAdgangDSR",
  "version" : "2.27.0",
  "name" : "KirurgiskAdgangDSR",
  "title" : "Kirurgisk adgang (DSR)",
  "status" : "active",
  "date" : "2022-10-06T00:00:00+02:00",
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
  "description" : "Kirurgisk adgang (DSR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/IncisionChoice",
      "concept" : [{
        "code" : "delto_pectoral",
        "display" : "Delto-pectoral"
      },
      {
        "code" : "mackenzie",
        "display" : "Antero-superior (MacKenzie)"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden"
      }]
    }]
  }
}

```

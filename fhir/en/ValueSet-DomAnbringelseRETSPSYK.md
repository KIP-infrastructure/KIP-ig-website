# Dom - Anbringelse (RETSPSYK) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dom - Anbringelse (RETSPSYK)**

## ValueSet: Dom - Anbringelse (RETSPSYK) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DomAnbringelseRETSPSYK | *Version*:2.27.0 |
| Active as of 2022-09-28 | *Computable Name*:DomAnbringelseRETSPSYK |

 
Dom - Anbringelse (RETSPSYK) 

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
  "id" : "DomAnbringelseRETSPSYK",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DomAnbringelseRETSPSYK",
  "version" : "2.27.0",
  "name" : "DomAnbringelseRETSPSYK",
  "title" : "Dom - Anbringelse (RETSPSYK)",
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
  "description" : "Dom - Anbringelse (RETSPSYK)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Verdict",
      "concept" : [{
        "code" : "placement_secure_ward",
        "display" : "Dom til anbringelse på sikringsafdelingen"
      },
      {
        "code" : "placement_psychiatric_ward_etc",
        "display" : "Dom til anbringelse på psykiatrisk afdeling etc."
      }]
    }]
  }
}

```

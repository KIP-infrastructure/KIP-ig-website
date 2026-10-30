# Dom - Behandling (RETSPSYK) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dom - Behandling (RETSPSYK)**

## ValueSet: Dom - Behandling (RETSPSYK) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DomBehandlingRETSPSYK | *Version*:2.27.1 |
| Active as of 2022-09-28 | *Computable Name*:DomBehandlingRETSPSYK |

 
Dom - Behandling (RETSPSYK) 

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
  "id" : "DomBehandlingRETSPSYK",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DomBehandlingRETSPSYK",
  "version" : "2.27.1",
  "name" : "DomBehandlingRETSPSYK",
  "title" : "Dom - Behandling (RETSPSYK)",
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
  "description" : "Dom - Behandling (RETSPSYK)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Verdict",
      "concept" : [{
        "code" : "treatment_correctional",
        "display" : "Dom til behandling på psykiatrisk afdeling med tilsyn af Kriminalforsorgen etc."
      },
      {
        "code" : "treatment",
        "display" : "Dom til behandling på psykiatrisk afdeling etc."
      }]
    }]
  }
}

```

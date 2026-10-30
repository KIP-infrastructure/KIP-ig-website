# Dom - Behandling, ambulant (RETSPSYK) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dom - Behandling, ambulant (RETSPSYK)**

## ValueSet: Dom - Behandling, ambulant (RETSPSYK) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DomBehandlingAmbulantRETSPSYK | *Version*:2.27.1 |
| Active as of 2022-09-28 | *Computable Name*:DomBehandlingAmbulantRETSPSYK |

 
Dom - Behandling, ambulant (RETSPSYK) 

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
  "id" : "DomBehandlingAmbulantRETSPSYK",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DomBehandlingAmbulantRETSPSYK",
  "version" : "2.27.1",
  "name" : "DomBehandlingAmbulantRETSPSYK",
  "title" : "Dom - Behandling, ambulant (RETSPSYK)",
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
  "description" : "Dom - Behandling, ambulant (RETSPSYK)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Verdict",
      "concept" : [{
        "code" : "treatment_outpatient",
        "display" : "Dom til ambulant behandling ved psykiatrisk afdeling etc."
      },
      {
        "code" : "treatment_outpatient_correctional",
        "display" : "Dom til ambulant behandling ved psykiatrisk afdeling med tilsyn af Kriminalforsorgen etc."
      },
      {
        "code" : "treatment_outpatient_admission",
        "display" : "Dom til ambulant behandling ved psykiatrisk afdeling med mulighed for indlæggelse etc."
      },
      {
        "code" : "treatment_outpatient_correctional_admission",
        "display" : "Dom til ambulant behandling ved psykiatrisk afdeling med tilsyn af Kriminalforsorgen og mulighed for indlæggelse etc."
      }]
    }]
  }
}

```

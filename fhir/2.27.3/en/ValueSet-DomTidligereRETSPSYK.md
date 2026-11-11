# Dom - Tidligere (RETSPSYK) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dom - Tidligere (RETSPSYK)**

## ValueSet: Dom - Tidligere (RETSPSYK) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DomTidligereRETSPSYK | *Version*:2.27.3 |
| Active as of 2022-09-28 | *Computable Name*:DomTidligereRETSPSYK |

 
Dom - Tidligere (RETSPSYK) 

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
  "id" : "DomTidligereRETSPSYK",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DomTidligereRETSPSYK",
  "version" : "2.27.3",
  "name" : "DomTidligereRETSPSYK",
  "title" : "Dom - Tidligere (RETSPSYK)",
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
  "description" : "Dom - Tidligere (RETSPSYK)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Verdict",
      "concept" : [{
        "code" : "ordinary_penalty",
        "display" : "Almindelig straf"
      },
      {
        "code" : "placement_psychiatric_ward",
        "display" : "Dom til anbringelse i psykiatrisk afdeling"
      },
      {
        "code" : "placement_secure_ward",
        "display" : "Dom til anbringelse på sikringsafdelingen"
      },
      {
        "code" : "placement_psychiatric_ward_etc",
        "display" : "Dom til anbringelse på psykiatrisk afdeling etc."
      },
      {
        "code" : "treatment_correctional",
        "display" : "Dom til behandling på psykiatrisk afdeling med tilsyn af kriminalforsorgen etc."
      },
      {
        "code" : "treatment_outpatient",
        "display" : "Dom til ambulant behandling ved psykiatrisk afdeling"
      },
      {
        "code" : "treatment_outpatient_correctional",
        "display" : "Dom til ambulant behandling ved psykiatrisk afdeling med tilsyn af kriminalforsorgen etc."
      },
      {
        "code" : "treatment_outpatient_admission",
        "display" : "Dom til ambulant behandling ved psykiatrisk afdeling med mulighed for indlæggelse etc."
      },
      {
        "code" : "treatment_outpatient_correctional_admission",
        "display" : "Dom til ambulant behandling ved psykiatrisk afdeling med tilsyn af kriminalforsorgen og mulighed for indlæggelse etc."
      }]
    }]
  }
}

```

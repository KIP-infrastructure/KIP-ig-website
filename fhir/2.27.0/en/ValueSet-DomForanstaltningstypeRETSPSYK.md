# Dom - Foranstaltningstype (RETSPSYK) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dom - Foranstaltningstype (RETSPSYK)**

## ValueSet: Dom - Foranstaltningstype (RETSPSYK) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DomForanstaltningstypeRETSPSYK | *Version*:2.27.0 |
| Active as of 2022-09-28 | *Computable Name*:DomForanstaltningstypeRETSPSYK |

 
Dom - Foranstaltningstype (RETSPSYK) 

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
  "id" : "DomForanstaltningstypeRETSPSYK",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DomForanstaltningstypeRETSPSYK",
  "version" : "2.27.0",
  "name" : "DomForanstaltningstypeRETSPSYK",
  "title" : "Dom - Foranstaltningstype (RETSPSYK)",
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
  "description" : "Dom - Foranstaltningstype (RETSPSYK)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Verdict",
      "concept" : [{
        "code" : "placement_psychiatric_ward",
        "display" : "Dom til anbringelse i psykiatrisk afdeling"
      },
      {
        "code" : "treatment",
        "display" : "Dom til behandling på psykiatrisk afdeling"
      },
      {
        "code" : "treatment_outpatient",
        "display" : "Dom til ambulant behandling ved psykiatrisk afdeling"
      }]
    }]
  }
}

```

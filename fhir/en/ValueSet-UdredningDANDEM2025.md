# Udredning (DANDEM) 2025 - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Udredning (DANDEM) 2025**

## ValueSet: Udredning (DANDEM) 2025 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/UdredningDANDEM2025 | *Version*:2.27.3 |
| Active as of 2025-05-09 | *Computable Name*:UdredningDANDEM2025 |

 
Udredning (DANDEM) - Fjernet to udfald og omformuleret no_wish_for_assessment. Erstatter et tidligere VS. 

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
  "id" : "UdredningDANDEM2025",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/UdredningDANDEM2025",
  "version" : "2.27.3",
  "name" : "UdredningDANDEM2025",
  "title" : "Udredning (DANDEM) 2025",
  "status" : "active",
  "date" : "2025-05-09T00:00:00+02:00",
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
  "description" : "Udredning (DANDEM) - Fjernet to udfald og omformuleret no_wish_for_assessment. Erstatter et tidligere VS.",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AssessmentType",
      "concept" : [{
        "code" : "primary_dementia_assessment",
        "display" : "Primær demensudredning, henvist direkte"
      },
      {
        "code" : "second_opinion",
        "display" : "Second opinion"
      },
      {
        "code" : "revisited_primary_assessment",
        "display" : "Omvisiteret fritvalgspatient til primær udredning"
      },
      {
        "code" : "no_wish_for_assessment",
        "display" : "Patient afbryder udredning før diagnosesamtale"
      }]
    }]
  }
}

```

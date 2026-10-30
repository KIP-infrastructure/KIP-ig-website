# Blodsygdomme - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Blodsygdomme**

## ValueSet: Blodsygdomme 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/HematologicalDiseases | *Version*:2.27.1 |
| Active as of 2022-07-08 | *Computable Name*:HematologicalDiseases |

 
Blodsygdomme 

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
  "id" : "HematologicalDiseases",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/HematologicalDiseases",
  "version" : "2.27.1",
  "name" : "HematologicalDiseases",
  "title" : "Blodsygdomme",
  "status" : "active",
  "date" : "2022-07-08T00:00:00+02:00",
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
  "description" : "Blodsygdomme",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasesUnspecified",
      "concept" : [{
        "code" : "myelodysplastic_syndrome",
        "display" : "1: Myelodyspl. syndrom (undt. CMML)"
      },
      {
        "code" : "chronic_myelomonocytic_leukemia",
        "display" : "2: CMML (Kronisk MyeloMonocytLeuk.)"
      },
      {
        "code" : "essential_thrombocytosis",
        "display" : "3: Ess. thrombocytose"
      },
      {
        "code" : "polycythemia_vera",
        "display" : "4: Polycytæmia vera"
      },
      {
        "code" : "myelofibrosis",
        "display" : "5: Myelofibrose"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "6: Andet"
      }]
    }]
  }
}

```

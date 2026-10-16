# Molekylærbiologiske undersøgelses resultat - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Molekylærbiologiske undersøgelses resultat**

## ValueSet: Molekylærbiologiske undersøgelses resultat 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MolecurlarBiologyExamination | *Version*:2.27.0 |
| Active as of 2022-07-13 | *Computable Name*:MolecurlarBiologyExamination |

 
Molekylærbiologiske undersøgelses resultat eller karyotyp 

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
  "id" : "MolecurlarBiologyExamination",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MolecurlarBiologyExamination",
  "version" : "2.27.0",
  "name" : "MolecurlarBiologyExamination",
  "title" : "Molekylærbiologiske undersøgelses resultat",
  "status" : "active",
  "date" : "2022-07-13T00:00:00+02:00",
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
  "description" : "Molekylærbiologiske undersøgelses resultat eller karyotyp",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "normal",
        "display" : "Normal"
      },
      {
        "code" : "abnormal",
        "display" : "Klonale forandringer"
      },
      {
        "code" : "not_performed",
        "display" : "Ej udført"
      },
      {
        "code" : "none",
        "display" : "Ingen mitoser"
      }]
    }]
  }
}

```

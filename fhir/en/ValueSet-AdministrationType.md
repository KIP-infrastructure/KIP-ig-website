# Medicin administration Type - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medicin administration Type**

## ValueSet: Medicin administration Type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AdministrationType | *Version*:2.27.2 |
| Active as of 2022-10-11 | *Computable Name*:AdministrationType |

 
Medicin administration Type 

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
  "id" : "AdministrationType",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AdministrationType",
  "version" : "2.27.2",
  "name" : "AdministrationType",
  "title" : "Medicin administration Type",
  "status" : "active",
  "date" : "2022-10-11T00:00:00+02:00",
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
  "description" : "Medicin administration Type",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalTreatmentAdministrationType",
      "concept" : [{
        "code" : "oral",
        "display" : "Oral"
      },
      {
        "code" : "intravenous",
        "display" : "Intravenøs"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```

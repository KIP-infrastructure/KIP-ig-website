# Administrationstype Jern (DCCG) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Administrationstype Jern (DCCG)**

## ValueSet: Administrationstype Jern (DCCG) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AdministrationTypeDCCG | *Version*:2.27.1 |
| Active as of 2022-11-09 | *Computable Name*:AdministrationTypeDCCG |

 
Administration af præoperativ jernbehandling 

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
  "id" : "AdministrationTypeDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AdministrationTypeDCCG",
  "version" : "2.27.1",
  "name" : "AdministrationTypeDCCG",
  "title" : "Administrationstype Jern (DCCG)",
  "status" : "active",
  "date" : "2022-11-09T00:00:00+02:00",
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
  "description" : "Administration af præoperativ jernbehandling",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalTreatmentAdministrationType",
      "concept" : [{
        "code" : "oral",
        "display" : "Oral behandling"
      },
      {
        "code" : "intravenous",
        "display" : "Intravenøs behandling"
      }]
    }]
  }
}

```

# Sygdom; medicinsk behandlet (DHDB) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sygdom; medicinsk behandlet (DHDB)**

## ValueSet: Sygdom; medicinsk behandlet (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SygdomMedicinskBehandletDHDB | *Version*:2.27.0 |
| Active as of 2022-07-20 | *Computable Name*:SygdomMedicinskBehandletDHDB |

 
Sygdom; medicinsk behandlet (DHDB) 

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
  "id" : "SygdomMedicinskBehandletDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SygdomMedicinskBehandletDHDB",
  "version" : "2.27.0",
  "name" : "SygdomMedicinskBehandletDHDB",
  "title" : "Sygdom; medicinsk behandlet (DHDB)",
  "status" : "active",
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "Sygdom; medicinsk behandlet (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasesUnspecified",
      "concept" : [{
        "code" : "diabetes",
        "display" : "Diabetes mellitus"
      },
      {
        "code" : "heart_disease",
        "display" : "Hjertesygdom (dog ikke velbeh. hypertension)"
      },
      {
        "code" : "lung_disease",
        "display" : "Lungesygdom"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andre (eks. lever, nyrer, hjerne, thyroidea)"
      }]
    }]
  }
}

```

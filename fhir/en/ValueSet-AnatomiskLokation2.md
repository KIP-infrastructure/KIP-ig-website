# Anatomisk lokation 2 - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anatomisk lokation 2**

## ValueSet: Anatomisk lokation 2 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AnatomiskLokation2 | *Version*:2.27.1 |
| Active as of 2022-10-12 | *Computable Name*:AnatomiskLokation2 |

 
Anatomisk lokation 2 

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
  "id" : "AnatomiskLokation2",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AnatomiskLokation2",
  "version" : "2.27.1",
  "name" : "AnatomiskLokation2",
  "title" : "Anatomisk lokation 2",
  "status" : "active",
  "date" : "2022-10-12T00:00:00+02:00",
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
  "description" : "Anatomisk lokation 2",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnatomicalLocations",
      "concept" : [{
        "code" : "adneks",
        "display" : "Adneks"
      },
      {
        "code" : "gastrocolic_ligament",
        "display" : "Gastrokoliske ligament"
      },
      {
        "code" : "lymfeknude_lateral",
        "display" : "Lateralt lymfeknudecompartment på bækken væg"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "T001220",
        "display" : "Bugvæg"
      },
      {
        "code" : "T000703",
        "display" : "Duodenum"
      },
      {
        "code" : "T000627",
        "display" : "Galdeblære"
      },
      {
        "code" : "T000607",
        "display" : "Lever"
      },
      {
        "code" : "T000132",
        "display" : "Milt"
      },
      {
        "code" : "T000773",
        "display" : "Nyre"
      },
      {
        "code" : "T000240",
        "display" : "Os sacrum"
      },
      {
        "code" : "T000241",
        "display" : "Os coccygis"
      },
      {
        "code" : "T000638",
        "display" : "Pancreas"
      },
      {
        "code" : "T001222",
        "display" : "Peritoneum parietale"
      },
      {
        "code" : "T000695",
        "display" : "Tyndtarm"
      },
      {
        "code" : "T000803",
        "display" : "Urteter"
      },
      {
        "code" : "T000812",
        "display" : "Urinblære"
      },
      {
        "code" : "T000898",
        "display" : "Uterus"
      },
      {
        "code" : "T000892",
        "display" : "Vagina"
      },
      {
        "code" : "T000670",
        "display" : "Ventrikel"
      }]
    }]
  }
}

```

# ICD 10 koder til DPD - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ICD 10 koder til DPD**

## ValueSet: ICD 10 koder til DPD (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/IDC10DPD | *Version*:2.15.0 |
| Active as of 2022-08-25 | *Computable Name*:IDC10DPD |

 
ICD 10 koder til DPD 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 32 concepts

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "IDC10DPD",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/IDC10DPD",
  "version" : "2.15.0",
  "name" : "IDC10DPD",
  "title" : "ICD 10 koder til DPD",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-08-25T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "ICD 10 koder til DPD",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKSCodeCollection",
        "concept" : [
          {
            "code" : "lips_mouth_throat",
            "display" : "Kræft i læber, mundhule og svælg (DC00-DC14)"
          },
          {
            "code" : "colon_rectum",
            "display" : "Kræft i tyktarm og endetarm (DC18-DC20)"
          },
          {
            "code" : "trachea_bronchi_lung",
            "display" : "Kræft i luftrøret og bronkier og lunge (DC33-DC34)"
          },
          {
            "code" : "uterus",
            "display" : "Kræft i livmoderen (inkl. uspecifik) (DC54-DC55)"
          },
          {
            "code" : "ovary_fallopian_tube",
            "display" : "Kræft i æggestok og æggeleder (DC56+DC570-DC574)"
          },
          {
            "code" : "kidney_pelvis_ureter",
            "display" : "Kræft i nyre, nyrebækken og urinleder (DC64-DC66)"
          },
          {
            "code" : "central_nervous_system",
            "display" : "Kræft i centralnervesystem (DC70-DC72+DC751-DC753)"
          },
          {
            "code" : "non_hodgkin",
            "display" : "Non-hodgkin malignt lymform (DC82-DC85)"
          },
          {
            "code" : "leukemia",
            "display" : "Leukæmi (DC91-DC95)"
          },
          {
            "code" : "mesotel_tissue",
            "display" : "Kræft i mesotel, bindevæv og andet bløddelsvæv (DC45-DC49)"
          },
          {
            "code" : "unspecific",
            "display" : "Kræft med dårligt specificerede, sekundære og ikke specificerede lokalisationer (DC76-DC80)"
          },
          {
            "code" : "heart_vessel",
            "display" : "Hjertekar sygdom (DI00-DI52+DI70-DI99)"
          },
          {
            "code" : "neurological",
            "display" : "Neurologisk sygdom (ikke apopleksi) (DI64-DI69+DG00-DG99+DF00-DF03)"
          },
          {
            "code" : "apoplexia",
            "display" : "Apopleksi (cerebral thrombose/hæmorrhagi) (DI60-DI63)"
          },
          {
            "code" : "lung",
            "display" : "Lungesygdomme (DJ00-DJ99+DE84)"
          },
          {
            "code" : "kidney",
            "display" : "Nyresygdomme (DN00-DN29)"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
        "concept" : [
          {
            "code" : "DC15",
            "display" : "Kræft i spiserøret"
          },
          {
            "code" : "DC16",
            "display" : "Kræft i mavesækken"
          },
          {
            "code" : "DC17",
            "display" : "Kræft i tyndtarmen"
          },
          {
            "code" : "DC22",
            "display" : "Kræft i leveren og intrahepatiske galdegange"
          },
          {
            "code" : "DC25",
            "display" : "Kræft i bugspytkirtlen"
          },
          {
            "code" : "DC32",
            "display" : "Kræft i strubehovedet"
          },
          {
            "code" : "DC43",
            "display" : "Modermærkekræft i huden"
          },
          {
            "code" : "DC50",
            "display" : "Brystkræft"
          },
          {
            "code" : "DC53",
            "display" : "Kræft i livmoderhalsen"
          },
          {
            "code" : "DC61",
            "display" : "Kræft i blærehalskirtlen"
          },
          {
            "code" : "DC62",
            "display" : "Testikelkræft"
          },
          {
            "code" : "DC67",
            "display" : "Kræft i urinblæren"
          },
          {
            "code" : "DC73",
            "display" : "Kræft i skjoldbruskkirtlen"
          },
          {
            "code" : "DC81",
            "display" : "Hodgkin lymfomer"
          },
          {
            "code" : "DC90",
            "display" : "Maligne plasmacelle neoplasier"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "other",
            "display" : "Anden sygdom"
          }
        ]
      }
    ]
  }
}

```

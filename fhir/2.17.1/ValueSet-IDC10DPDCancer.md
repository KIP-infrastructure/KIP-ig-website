# ICD 10 cancer koder til DPD - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ICD 10 cancer koder til DPD**

## ValueSet: ICD 10 cancer koder til DPD (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/IDC10DPDCancer | *Version*:2.17.1 |
| Active as of 2022-08-25 | *Computable Name*:IDC10DPDCancer |

 
ICD 10 cancer koder til DPD 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

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
  "id" : "IDC10DPDCancer",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/IDC10DPDCancer",
  "version" : "2.17.1",
  "name" : "IDC10DPDCancer",
  "title" : "ICD 10 cancer koder til DPD",
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
  "description" : "ICD 10 cancer koder til DPD",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKSCodeCollection",
        "concept" : [
          {
            "code" : "lips_mouth_throat",
            "display" : "Mundhule og svælg (DC00-DC14)"
          },
          {
            "code" : "colon_rectum",
            "display" : "Tyktarm og endetarm (DC18-DC20)"
          },
          {
            "code" : "trachea_bronchi_lung",
            "display" : "Lunge, bronkier og luftrør (DC33-DC34)"
          },
          {
            "code" : "uterus",
            "display" : "Livmoder (inkl. uspecifik) (DC54-DC55)"
          },
          {
            "code" : "ovary_fallopian_tube",
            "display" : "Æggestokke (DC56+DC570-DC574)"
          },
          {
            "code" : "kidney_pelvis_ureter",
            "display" : "Nyre, nyrebækken og urinleder (DC64-DC66)"
          },
          {
            "code" : "central_nervous_system",
            "display" : "Hjerne og centralnervesystem (DC70-DC72+DC751-DC753)"
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
            "display" : "Sarkomer og andre bløddele (DC45-DC49)"
          },
          {
            "code" : "unspecific",
            "display" : "Ukendt kræft"
          },
          {
            "code" : "other_cancer_diseases",
            "display" : "Anden kræft (C76-80+D37-D48)"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
        "concept" : [
          {
            "code" : "DC15",
            "display" : "Spiserør (DC15)"
          },
          {
            "code" : "DC16",
            "display" : "Mavesæk (DC16)"
          },
          {
            "code" : "DC17",
            "display" : "Tyndtarmen (DC17)"
          },
          {
            "code" : "DC22",
            "display" : "Lever og intrahepatiske galdeveje (DC22)"
          },
          {
            "code" : "DC25",
            "display" : "Bugspytkirtel (DC25)"
          },
          {
            "code" : "DC32",
            "display" : "Strubehoved (DC32)"
          },
          {
            "code" : "DC43",
            "display" : "Modermærkekræft (DC43)"
          },
          {
            "code" : "DC50",
            "display" : "Bryst (DC50)"
          },
          {
            "code" : "DC53",
            "display" : "Livmoderhals (DC53)"
          },
          {
            "code" : "DC61",
            "display" : "Blærehalskirtel (DC61)"
          },
          {
            "code" : "DC62",
            "display" : "Testikel (DC62)"
          },
          {
            "code" : "DC67",
            "display" : "Urinblære (DC67)"
          },
          {
            "code" : "DC73",
            "display" : "Skjoldbruskkirtel (DC73)"
          },
          {
            "code" : "DC81",
            "display" : "Hodgkin malignt lymfom (DC81)"
          },
          {
            "code" : "DC90",
            "display" : "Myleomatose (DC90)"
          }
        ]
      }
    ]
  }
}

```
